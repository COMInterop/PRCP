#!/bin/bash 

#minimum length
ML=50000
MLK=$((ML/1000))k

#edit for length

awk '{if(sqrt(($3-$2)*($3-$2)) >= '$ML') print}' links.srt.txt > links-$MLK.txt

#mark translocations

awk '{ if (substr($1,length($1),1) != substr($4,length($4),1)) print $0, "type=translocation"; else print $0 }' links-$MLK.txt > links-$MLK-tl.txt

#generate no-tl file

grep -v "translocation" links-$MLK-tl.txt | sed '/^$/d' > links-$MLK-no-tl.txt

#generate tl file

awk '/translocation/ { print }' links-$MLK-tl.txt > links-$MLK-tl-only.txt
