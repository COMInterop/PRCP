#!/bin/bash

input_file="prcp-nlr-tps.circos"

# Create a backup of the original file
cp "$input_file" "$input_file.bak"

# Modify the 4th column based on the annotation type
awk -v OFS='\t' '{ if ($4 == "NLR" || $4 == "TPS") { $4 = "id=" $4 } print }' "$input_file.bak" > "$input_file"

# Remove the backup file if the modification was successful
if [ $? -eq 0 ]; then
    rm "$input_file.bak"
fi
