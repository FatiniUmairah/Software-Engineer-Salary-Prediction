import subprocess
from flask import Flask, render_template, request, redirect, url_for, session,jsonify
import streamlit as st
from predict_page import show_predict_page
from explore_page import show_explore_page
from flask_mysqldb import MySQL
import json





# Streamlit part
page = st.sidebar.selectbox("Explore Or Predict", ("Predict", "Explore"))

if page == "Predict":
    show_predict_page()
else:
    show_explore_page()

# Flask part
app = Flask(__name__, template_folder='template')
app.secret_key = 'your_secret_key'  # Replace with a secure secret key

# Specify the custom template folder
app.config['TEMPLATES_AUTO_RELOAD'] = True
app.template_folder = 'template'

app.config['MYSQL_HOST'] = "localhost"
app.config['MYSQL_USER'] = "root"
app.config['MYSQL_PASSWORD'] = ""
app.config['MYSQL_DB'] = "ses_database"


@app.route('/')
def index():
    return render_template('index.php')

@app.route('/logout', methods=['POST'])
def logout():
    # Add any additional logout logic if needed
    return redirect(url_for('index'))

@app.route('/loginCustomer', methods=['GET', 'POST'])
def login_customer():
    if request.method == 'POST':
        # Assuming successful login, set the session variable to indicate login
        session['logged_in'] = True
        return redirect(url_for('predict_page'))

    return render_template('loginCustomer.php')

@app.route('/predict_page')
def predict_page():
    # Check if the user is logged in
 

    # Run Streamlit app using subprocess
    subprocess.run(["streamlit", "run", "predict_page.py"])

    # Placeholder return value (you can customize it as needed)
    return "This is the Predict Page"

@app.route('/successUser')
def success_user():
    return render_template('SuccessLoginUser.php')

# ... (rest of your code)

@app.route('/loginAdmin', methods=['GET', 'POST'])
def login_admin():
    if request.method == 'POST':
        username = request.form.get('Emp_Username')
        password = request.form.get('Emp_Pass')

        # Add your authentication logic here (e.g., check username and password)

        # For demonstration purposes, I'm assuming a simple check for a specific username and password
        if username == 'admin' and password == 'admin':
            return redirect(url_for('adminDashboard'))

    return render_template('loginAdmin.php')

@app.route('/successAdmin')
def success_admin():
    return render_template('successLoginAdmin.php')



from flask_wtf import FlaskForm
from wtforms import StringField
from wtforms.validators import DataRequired

class UpdateCompanyForm(FlaskForm):
    COMPANY_ADDRESS = StringField('Company Address', validators=[DataRequired()])
    COMPANY_PHONE = StringField('Phone Number', validators=[DataRequired()])
    JOB_POSITION = StringField('Job Position', validators=[DataRequired()])
    COMPANY_EMAIL = StringField('Company Email', validators=[DataRequired()])
    LINK = StringField('LINK', validators=[DataRequired()])


# Create a form for updating company information with validation
class UpdateCompanyForm(FlaskForm):
    COMPANY_ADDRESS = StringField('Company Address', validators=[DataRequired()])
    COMPANY_PHONE = StringField('Phone Number', validators=[DataRequired()])
    JOB_POSITION = StringField('Job Position', validators=[DataRequired()])
    COMPANY_EMAIL = StringField('Company Email', validators=[DataRequired()])
    LINK = StringField('LINK', validators=[DataRequired()])


def get_existing_data_from_database(COMPANY_NAME):
    try:
        with mysql.connection.cursor() as cur:
            cur.execute("SELECT * FROM company WHERE COMPANY_NAME = %s", (COMPANY_NAME,))
            result = cur.fetchone()
            if result:
                columns = [desc[0] for desc in cur.description]
                existing_data = dict(zip(columns, result))
                return existing_data
    except Exception as e:
        print(f"Error fetching data: {e}")
    return None

@app.route('/update_company/<string:COMPANY_NAME>', methods=['GET', 'POST'])
def update_company(COMPANY_NAME):
    # Retrieve existing data from the database based on COMPANY_NAME
    existing_data = get_existing_data_from_database(COMPANY_NAME)

    # Create a form instance
    form = UpdateCompanyForm()

    if form.validate_on_submit():
        # Retrieve the form data
        company_address = form.COMPANY_ADDRESS.data
        company_phone = form.COMPANY_PHONE.data
        job_position = form.JOB_POSITION.data
        company_email = form.COMPANY_EMAIL.data
        link = form.LINK.data

        try:
            # Update the company information in the database using parameterized query
            with mysql.connection.cursor() as cur:
                cur.execute("""
                    UPDATE company
                    SET COMPANY_ADDRESS=%s, COMPANY_PHONE=%s, JOB_POSITION=%s, COMPANY_EMAIL=%s, LINK=%s
                    WHERE COMPANY_NAME=%s
                """, (company_address, company_phone, job_position, company_email, link, COMPANY_NAME))
                mysql.connection.commit()
                print("Data updated successfully!")
                return redirect(url_for('adminDashboard'))
        except Exception as e:
            print(f"Error: {e}")
            # Handle the error gracefully, e.g., display an error message to the user

    return render_template('updatepage.html', existingData=existing_data, form=form)




@app.route('/add_company', methods=['GET', 'POST'])
def add_company():
    if request.method == 'POST':
        COMPANY_NAME = request.form['COMPANY_NAME']
        COMPANY_ADDRESS = request.form['COMPANY_ADDRESS']
        COMPANY_PHONE = request.form['COMPANY_PHONE']
        JOB_POSITION = request.form['JOB_POSITION']
        COMPANY_EMAIL = request.form['COMPANY_EMAIL']
        LINK = request.form['LINK']


        try:
            with mysql.connection.cursor() as cur:
                cur.execute("INSERT INTO company (COMPANY_NAME, COMPANY_ADDRESS, COMPANY_PHONE, JOB_POSITION, COMPANY_EMAIL,LINK) VALUES (%s, %s, %s, %s, %s,%s)", (COMPANY_NAME, COMPANY_ADDRESS, COMPANY_PHONE, JOB_POSITION, COMPANY_EMAIL,LINK))
                mysql.connection.commit()
                print("Data saved successfully!")
                return redirect(url_for('adminDashboard'))
        except Exception as e:
            print(f"Error: {e}")

    return render_template('add_company.html')




@app.route('/delete_page', methods=['POST'])
def delete_page():
    if request.method == 'POST':
        company_name = request.form.get('CompanyName')

        try:
            with mysql.connection.cursor() as cur:
                # Replace this line with your actual delete query
                # Example: cur.execute("DELETE FROM company WHERE COMPANY_NAME = %s", (company_name,))
                
                # For illustration purposes, we'll simulate a successful deletion
                # You should replace the following line with your actual database deletion logic
                cur.execute("DELETE FROM company WHERE COMPANY_NAME = %s", (company_name,))
                
                mysql.connection.commit()
                
                response = {'success': True, 'message': 'Company details deleted successfully!'}
        except Exception as e:
            response = {'success': False, 'message': str(e)}

        # Return a JSON response
        return jsonify(response)


@app.route('/register_customer')
def register_customer():
    return render_template('registerCustomer.php')

@app.route('/explore_page')
def explore_page():
    # Check if the user is logged in
  

    # Run Streamlit app using subprocess
    subprocess.run(["streamlit", "run", "explore_page.py"])

    # Placeholder return value (you can customize it as needed)
    return "This is the Explore Page"


mysql = MySQL(app)

@app.route('/custDashboard')
def custDashboard():
    try:
        with mysql.connection.cursor() as cur:
            cur.execute("SELECT * FROM company")
            fetchdata = cur.fetchall()
            columns = [desc[0] for desc in cur.description]  # Get column names
            data = [dict(zip(columns, row)) for row in fetchdata]
            print(data)  # Add this line for debugging
    except Exception as e:
        print(f"Error: {e}")
        data = None

    return render_template('custDashboard.html', data=data)

@app.route('/adminDashboard')
def adminDashboard():
    try:
        with mysql.connection.cursor() as cur:
            cur.execute("SELECT * FROM company")
            fetchdata = cur.fetchall()
            columns = [desc[0] for desc in cur.description]  # Get column names
            data = [dict(zip(columns, row)) for row in fetchdata]
            print(data)  # Add this line for debugging
    except Exception as e:
        print(f"Error: {e}")
        data = None

    return render_template('adminDashboard.html', data=data)

if __name__ == '__main__':
    app.run(debug=True)
