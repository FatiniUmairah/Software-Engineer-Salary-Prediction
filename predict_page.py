import streamlit as st
import pickle
import numpy as np

def load_model():
    with open('saved_steps.pkl', 'rb') as file:
        data = pickle.load(file)
    return data

data = load_model()

regressor = data["model"]
le_country = data["le_country"]
le_education = data["le_education"]

def show_predict_page():
    st.title("Software Developer Salary Prediction")

    st.write("""### We need some information to predict the salary""")
    
    countries = (
        "United States",
        "India",
        "United Kingdom",
        "Germany",
        "Canada",
        "Brazil",
        "France",
        "Spain",
        "Australia",
        "Netherlands",
        "Poland",
        "Italy",
        "Russian Federation",
        "Sweden",
    )

    education = (
        "Less than a Bachelors",
        "Bachelor’s degree",
        "Master’s degree",
        "Post grad",
    )

    # Sidebar button to navigate to explore_page.py
    explore_page_url = f'[Explore Page](http://localhost:5000/explore_page)'
    st.sidebar.markdown(explore_page_url, unsafe_allow_html=True)

    # Link to navigate to adminDashboard.html in Flask
    admin_dashboard_url = f'[Looking For Job?](http://localhost:5000/custDashboard)'
    st.sidebar.markdown(admin_dashboard_url, unsafe_allow_html=True)

    country = st.selectbox("Country", countries)
    education = st.selectbox("Education Level", education)
    expericence = st.slider("Years of Experience", 0, 50, 3)

    ok = st.button("Calculate Salary")
    if ok:
        X = np.array([[country, education, expericence]])
        X[:, 0] = le_country.transform(X[:, 0])
        X[:, 1] = le_education.transform(X[:, 1])
        X = X.astype(float)

        salary = regressor.predict(X)
        st.subheader(f"The estimated salary is ${salary[0]:.2f}")

# The following code ensures that Streamlit doesn't run in the script directly
if __name__ == '__main__':
    show_predict_page()
