import pandas as pd

# Load the data from the CSV files
output_df = pd.read_csv('updated_output.csv')
customers_df = pd.read_csv('customers.csv')

# Append the data from output_df to customers_df
combined_df = customers_df._append(output_df)

# Sort the combined dataframe alphabetically by client_name
combined_df = combined_df.sort_values('client_name')

# Save the combined data to a new CSV file
combined_df.to_csv('combined.csv', index=False)