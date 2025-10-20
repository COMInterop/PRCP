#!/bin/bash

# Input BED file path
input_file="$1"

# Output BED file path
output_file="$2"

# Size of each megabase (in base pairs)
mb_size=1000000

# Calculate the number of genes per megabase
awk -v mb_size="$mb_size" 'BEGIN{OFS="\t"} {
    # Calculate the start and end of the current megabase
    mb_start = int($2 / mb_size) * mb_size
    mb_end = mb_start + mb_size

    # Increment the gene count for the current megabase
    count[$1, mb_start, mb_end]++
}
END {
    # Print the gene counts for each megabase
    for (region in count) {
        split(region, parts, SUBSEP)
        print parts[1], parts[2], parts[3], count[region]
    }
}' "$input_file" > "$output_file"
