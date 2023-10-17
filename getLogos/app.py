from PIL import Image
import requests
from io import BytesIO

def download_and_resize(url, filename, base_width=200):
    response = requests.get(url)
    img = Image.open(BytesIO(response.content))
    w_percent = (base_width / float(img.size[0]))
    h_size = int((float(img.size[1]) * float(w_percent)))
    img = img.resize((base_width, h_size), Image.ANTIALIAS)
    img.save(filename)

import os

# Create directory for formatted logos
os.makedirs('logos-formatted', exist_ok=True)

# Format logos
for filename in os.listdir('logos-scraped'):
    if filename.endswith('.png'):
        old_path = os.path.join('logos-scraped', filename)
        new_path = os.path.join('logos-formatted', filename)
        download_and_resize(old_path, new_path)