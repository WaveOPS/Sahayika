import pandas as pd
import sys
from sklearn.preprocessing import LabelEncoder
from sklearn.tree import DecisionTreeClassifier

# Load the dataset
data = pd.read_csv("ML/fertilizer_recommendation/fertilizer_recommendation.csv")

# Label encoding for categorical features
le_soil = LabelEncoder()
data['Soil Type'] = le_soil.fit_transform(data['Soil Type'])
le_crop = LabelEncoder()
data['Crop Type'] = le_crop.fit_transform(data['Crop Type'])

# Splitting the data into input and output variables
X = data.iloc[:, :8]
y = data.iloc[:, -1]

# Training the Decision Tree Classifier model
dtc = DecisionTreeClassifier(random_state=0)
dtc.fit(X, y)

# Get the input parameters as command line arguments
jsonn = int(sys.argv[1])
jsonp = int(sys.argv[2])
jsonk = int(sys.argv[3])
jsont = float(sys.argv[4])
jsonh = float(sys.argv[5])
jsonsm = float(sys.argv[6])
jsonsoil = sys.argv[7]  # stays string
jsoncrop = sys.argv[8]  # stays string
soil_enc = le_soil.transform([jsonsoil])[0]
crop_enc = le_crop.transform([jsoncrop])[0]

# Encode soil and crop type
soil_enc = le_soil.transform([jsonsoil])[0]
crop_enc = le_crop.transform([jsoncrop])[0]

# Correct order: [Temp, Humidity, Moisture, Soil, Crop, N, P, K]
user_input = [[jsont, jsonh, jsonsm, soil_enc, crop_enc, jsonn, jsonp, jsonk]]

# Predict and print
fertilizer_name = dtc.predict(user_input)
print(str(fertilizer_name[0]))