# align contigs to scaffolds

minimap2 --secondary=no -a -t 10 -x asm5 -o pr-salk-contig-bed.sam /Volumes/data/prcp/assemble/assemblies/pr/pr-salk-all-rc.fasta /Volumes/data/prcp/align/contig-bed/pr-2.4.fa;
samtools sort -o pr-salk-contig-bed.srt.bam pr-salk-contig-bed.sam;
minimap2 --secondary=no -a -t 10 -x asm5 -o cp-salk-contig-bed.sam /Volumes/data/prcp/assemble/assemblies/cp/cp-salk-all-rc.fasta /Volumes/data/prcp/align/contig-bed/cp-2.4.fa;
samtools sort -o cp-salk-contig-bed.srt.bam cp-salk-contig-bed.sam;

# index BAM 

#convert to BED

bedtools bamtobed -i pr-salk-contig-bed.srt.bam > pr-salk-contig.bed; bedtools bamtobed -i cp-salk-contig-bed.srt.bam > cp-salk-contig.bed;
