<div align="center">
  <img src="https://example.com/sahayika_logo.png" alt="Sahayika Logo" width="200"/> 
  <h1>Sahayika - Smart Agriculture System</h1>
  <p>Empowering Farmers with AI-Driven Insights for Sustainable Agriculture</p>
</div>

---

## Overview

**Sahayika** is a comprehensive digital platform designed to empower farmers through **data-driven decision-making**, enhancing agricultural productivity and profitability. It addresses challenges like climate change impacts and traditional farming inefficiencies by leveraging **Machine Learning (ML)** and **Artificial Intelligence (AI)**.

The platform offers intelligent **crop and fertilizer recommendations**, **disease detection** via image analysis, **crop and yield prediction**, and **rainfall forecasting**. It also facilitates **direct crop selling**, connects farmers with buyers, and includes an **AI-powered chat assistant** with multilingual support.

---

## Key Features

Sahayika provides a suite of **AI-powered tools** to optimize agricultural processes:

* **Crop Recommendation:** Suggests optimal crops based on soil nutrients, temperature, humidity, pH, and rainfall.
* **Fertilizer Recommendation:** Provides precise fertilizer suggestions by analyzing soil conditions, crop type, and environmental parameters.
* **Disease Detection:** Identifies crop diseases from uploaded leaf images using advanced image classification.
* **Crop & Yield Prediction:** Predicts typical crops for a region/season and estimates potential crop yield based on various factors.
* **Rainfall Forecasting:** Offers rainfall estimates for specific districts and months using historical data.
* **Direct Crop Selling:** Connects farmers directly with buyers to streamline market access and ensure fair prices.
* **AI Chat Assistant:** Provides multilingual support via Google Translate for enhanced user accessibility.
* **Weather Updates & News Feed:** Keeps users informed with real-time weather data and agricultural news.

---

## Technical Stack

Sahayika is built on a robust foundation combining web technologies with powerful machine learning frameworks:

* **Backend:** PHP (Hypertext Preprocessor)
* **Machine Learning & Data Processing:** Python (with scikit-learn, PyTorch (implied for ResNet-9), pandas, joblib)
* **Web Server:** Apache
* **Inter-process Communication:** Command Line Interface (CLI) for PHP-Python interaction
* **Deployment OS:** Ubuntu 20.04 LTS on Microsoft Azure Virtual Machine

---

## Machine Learning Models

The intelligence behind Sahayika is powered by these models:

* **Crop Recommendation:** Random Forest Algorithm
* **Fertilizer Recommendation:** Decision Tree Classifier
* **Disease Detection:** ResNet-9 (Deep Learning)
* **Crop Prediction:** Custom Decision Tree Algorithm
* **Yield Prediction:** RandomForestRegressor
* **Rainfall Prediction:** Statistical Average of Historical Data

---

## Deployment

The Sahayika system is deployed on **Microsoft Azure Cloud**. This ensures:

* **Accessibility:** Available to farmers and stakeholders from any location with an internet connection.
* **Scalability:** Resources can be dynamically scaled based on demand.
* **Availability:** Reliable and consistent access to the system.
* **Real-time Predictions:** AI-powered predictions are delivered in real-time.

---

## Getting Started

To set up Sahayika locally:

### Prerequisites

* **PHP Environment** (e.g., Apache with PHP)
* **Python 3.x** and **pip**
* **Required Python Libraries:** `scikit-learn`, `pandas`, `joblib`, `torch` (or `tensorflow`)

---

### Installation Guide

Here's how to get Sahayika up and running:

1.  **Clone the folder into `htdocs`:**
    * Navigate to your `htdocs` directory (usually found within your XAMPP or WAMP installation).
    * Open your terminal or command prompt in the `htdocs` directory and clone the Sahayika repository there.

2.  **Install Requirements:**
    * Open your terminal or command prompt.
    * Navigate to the cloned Sahayika folder.
    * Run the following command to install the necessary dependencies:
        ```bash
        pip install -r requirements.txt
        ```

3.  **Database Setup:**
    * **Access phpMyAdmin:** Open your web browser and go to `http://localhost/phpmyadmin`.
    * **Create a new database:** In phpMyAdmin, create a new database named **`agriculture_portal`**.
    * **Import the database:** Select the newly created `agriculture_portal` database. Go to the "Import" tab, choose the `db/agriculture_portal.sql` file from the cloned Sahayika folder, and then click "Go" to import the database.

4.  **Access Sahayika:**
    * Open your web browser and navigate to **`http://localhost/Sahayika`**.

5.  **Register & Login:**
    * **New User:** You can register as a new user.
    * **Login:**
        * **Email:** `agricultureportal01@gmail.com`
        * **Password:** `password`

---

## Contributors

* Om Rajendra Moholkar
* Shital Vijay Prajapati
* Raghavendra Rama Kunder
* Pawan Rajesh Jamkhande
