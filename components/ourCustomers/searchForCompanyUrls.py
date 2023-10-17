
import requests
import pandas as pd
from tqdm import tqdm

# Replace with your own credentials
API_KEY = 'AIzaSyCHq3MOF3w2xU0rH2119jz17K4TCh4jMK8'
CX = '725c155e44b334895'


def google_search(query, search_type='text'):
    url = f'https://www.googleapis.com/customsearch/v1?q={query}&key={API_KEY}&cx={CX}'
    if search_type == 'image':
        url += '&searchType=image'
    response = requests.get(url)
    if response.status_code == 200:
        data = response.json()
        items = data.get('items', [])
        if items:
            return items[0]['link']
    else:
        print(f'Error {response.status_code}: {response.text}')
    return None

# Read the company names from list.txt
with open('list.txt', 'r') as file:
    company_names = [line.strip() for line in file]

# Prepare a DataFrame to hold the data
fieldnames = ['client_name', 'img_src', 'img_alt', 'img_width', 'href']
data = pd.DataFrame(columns=fieldnames)

for company_name in tqdm(company_names, desc="Processing companies"):
    primary_name = company_name.split('-')[0].strip()
    website_query = f"{primary_name} official website"
    logo_query = f"{primary_name} logo"
    
    website_url = google_search(website_query)
    logo_url = google_search(logo_query, search_type='image')
    
    # Append the data to the DataFrame
    new_row = pd.DataFrame([[primary_name, logo_url, f"{primary_name}", '200', website_url]], columns=fieldnames)
    data = data._append(new_row, ignore_index=True)

# Write the data to output.csv
data.to_csv('output.csv', index=False)

# Load and print the data to check
data = pd.read_csv('output.csv')
print(data)
