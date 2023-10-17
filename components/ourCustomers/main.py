from bs4 import BeautifulSoup
import csv

# Parse the HTML file
with open('../../index.html', 'r') as f:
    soup = BeautifulSoup(f, 'html.parser')

# Find all logo divs
logo_divs = soup.find_all('div', class_='large-3 medium-3 small-12 columns clients')

# Extract the necessary information
logos = []
for div in logo_divs:
    a = div.find('a')
    img = div.find('img')
    logos.append({
        'client_name': img['alt'],
        'img_src': img['src'],
        'img_alt': img['alt'],
        'img_width': img['width'],
        'href': a['href'],
    })

# Write the data to customers.csv
with open('customers.csv', 'w', newline='') as f:
    fieldnames = ['client_name', 'img_src', 'img_alt', 'img_width', 'href']
    writer = csv.DictWriter(f, fieldnames=fieldnames)

    writer.writeheader()
    for logo in logos:
        writer.writerow(logo)