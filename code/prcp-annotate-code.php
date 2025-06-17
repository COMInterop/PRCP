# TRANSFER ANNOTATIONS FROM A REFERENCE WITH LIFTOFF

# Here we use the GFF from cs10 as input

GFF=GCF_900626175.2_cs10_genomic.gff

liftoff \
	-g $GFF \
	-o $OUTPUT_NAME \
	-p $THREADS \
	-u unmapped.txt \
	-dir intermediate_mappings \
	-f $ANNOTATION_TYPES.txt \
	-chroms $CHROMS.txt \
	-unplaced $UNPLACED.txt \
	-copies \
	-sc 0.99 \
	$DRAFT.fasta \
	$REFERENCE.fasta

# $ANNOTATION_TYPES.txt contains the names of annotations to be transferred. We do not include 'region' annotations that simply span the length of each sequence. Here is an example:

cDNA_match
CDS
exon
gene
lnc_RNA
mRNA
pseudogene
rRNA
snoRNA
snRNA
transcript
tRNA

# $CHROMS.txt is a comma-separated list of homologs. This can be calculated with Syri (see prcp-align-code.php), or for Cannabis and cs10 you can use this example:

NC_044371.1,$GENOTYPE_chr_1
NC_044375.1,$GENOTYPE_chr_2
NC_044372.1,$GENOTYPE_chr_3
NC_044373.1,$GENOTYPE_chr_4
NC_044374.1,$GENOTYPE_chr_5
NC_044377.1,$GENOTYPE_chr_6
NC_044378.1,$GENOTYPE_chr_7
NC_044379.1,$GENOTYPE_chr_8
NC_044376.1,$GENOTYPE_chr_9
NC_044370.1,$GENOTYPE_chr_X
NC_029855.1,$GENOTYPE_mt

# $UNPLACED.txt is a list of genes you might like to find that are on sequences not listed in $CHROMS.txt. Here is the example from cs10: 

NW_022060417.1
NW_022060454.1
NW_022060465.1
NW_022060487.1
NW_022060476.1
NW_022060498.1
NW_022060507.1
NW_022060528.1
NW_022060518.1
NW_022060329.1
NW_022060340.1
NW_022060348.1
NW_022060359.1
NW_022060368.1
NW_022060378.1
NW_022060388.1
NW_022060397.1
NW_022060407.1
NW_022060416.1
NW_022060428.1
NW_022060437.1
NW_022060446.1
NW_022060447.1
NW_022060450.1
NW_022060448.1
NW_022060451.1
NW_022060449.1
NW_022060452.1
NW_022060453.1
NW_022060455.1
NW_022060456.1
NW_022060457.1
NW_022060461.1
NW_022060462.1
NW_022060463.1
NW_022060458.1
NW_022060459.1
NW_022060464.1
NW_022060467.1
NW_022060460.1
NW_022060466.1
NW_022060469.1
NW_022060471.1
NW_022060468.1
NW_022060472.1
NW_022060474.1
NW_022060475.1
NW_022060477.1
NW_022060470.1
NW_022060473.1
NW_022060479.1
NW_022060480.1
NW_022060482.1
NW_022060481.1
NW_022060478.1
NW_022060485.1
NW_022060486.1
NW_022060488.1
NW_022060490.1
NW_022060483.1
NW_022060494.1
NW_022060496.1
NW_022060484.1
NW_022060491.1
NW_022060493.1
NW_022060500.1
NW_022060502.1
NW_022060489.1
NW_022060492.1
NW_022060505.1
NW_022060499.1
NW_022060501.1
NW_022060497.1
NW_022060508.1
NW_022060510.1
NW_022060509.1
NW_022060504.1
NW_022060511.1
NW_022060512.1
NW_022060506.1
NW_022060513.1
NW_022060503.1
NW_022060517.1
NW_022060516.1
NW_022060515.1
NW_022060495.1
NW_022060519.1
NW_022060522.1
NW_022060523.1
NW_022060524.1
NW_022060520.1
NW_022060525.1
NW_022060527.1
NW_022060320.1
NW_022060325.1
NW_022060323.1
NW_022060521.1
NW_022060326.1
NW_022060514.1
NW_022060319.1
NW_022060327.1
NW_022060328.1
NW_022060330.1
NW_022060331.1
NW_022060322.1
NW_022060332.1
NW_022060335.1
NW_022060333.1
NW_022060342.1
NW_022060337.1
NW_022060339.1
NW_022060526.1
NW_022060350.1
NW_022060321.1
NW_022060344.1
NW_022060354.1
NW_022060352.1
NW_022060349.1
NW_022060336.1
NW_022060355.1
NW_022060334.1
NW_022060351.1
NW_022060353.1
NW_022060324.1
NW_022060347.1
NW_022060338.1
NW_022060356.1
NW_022060341.1
NW_022060357.1
NW_022060346.1
NW_022060362.1
NW_022060358.1
NW_022060345.1
NW_022060365.1
NW_022060370.1
NW_022060360.1
NW_022060371.1
NW_022060373.1
NW_022060374.1
NW_022060372.1
NW_022060363.1
NW_022060376.1
NW_022060379.1
NW_022060377.1
NW_022060380.1
NW_022060361.1
NW_022060343.1
NW_022060367.1
NW_022060364.1
NW_022060369.1
NW_022060375.1
NW_022060383.1
NW_022060382.1
NW_022060385.1
NW_022060381.1
NW_022060393.1
NW_022060392.1
NW_022060366.1
NW_022060390.1
NW_022060395.1
NW_022060394.1
NW_022060384.1
NW_022060396.1
NW_022060389.1
NW_022060398.1
NW_022060400.1
NW_022060387.1
NW_022060386.1
NW_022060402.1
NW_022060403.1
NW_022060405.1
NW_022060401.1
NW_022060406.1
NW_022060404.1
NW_022060409.1
NW_022060412.1
NW_022060414.1
NW_022060411.1
NW_022060399.1
NW_022060410.1
NW_022060408.1
NW_022060418.1
NW_022060419.1
NW_022060413.1
NW_022060415.1
NW_022060424.1
NW_022060422.1
NW_022060421.1
NW_022060425.1
NW_022060431.1
NW_022060429.1
NW_022060420.1
NW_022060433.1
NW_022060438.1
NW_022060436.1
NW_022060426.1
NW_022060435.1
NW_022060427.1
NW_022060441.1
NW_022060434.1
NW_022060423.1
NW_022060432.1
NW_022060440.1
NW_022060442.1
NW_022060430.1
NW_022060444.1
NW_022060445.1
NW_022060439.1
NW_022060443.1
NW_022060391.1

# Terpene synthase annotation with Liftoff
# Please see the MS for how to filter the reference GFF to only include terpene synthases.
# We located these in Genious Prime, copied them to a new track, and then exported that track as a GFF.
# If you like, you can find our cs10-tps-47.gff on Zenodo (DOI 10.5281/zenodo.15284085).

GFF=cs10-tps-47.gff

liftoff \
	-g $GFF \
	-o $GENOTYPE-tps.gff \
	-p $THREADS \
	-u $UNMAPPED.txt \
	-dir intermediate_mappings \
	-f $TPS_TYPES.txt \
	-copies \
	-sc 0.50 \
	$DRAFT.fasta \
	$REFERENCE.fasta

# NLR ANNOTATION

# NLR annotation with species-specific nucleotide binding site (NBS) Hidden Markov Model (HMM)

# Make a BLAST db

makeblastdb \
     -in $DRAFT.fasta \
     -out $GENOTYPE \
     -dbtype nucl \
     -input_type fasta \
     -max_file_sz 2GB \
     -hash_index \
     -parse_seqids
     
# Search with the NBS_712 HMM from Arabidopsis (https://niblrrs.ucdavis.edu/At_RGenes/HMM_Model/HMM_Model_NBS_Ath.html)
# We share it here for your convenience:

>NBS_712 profile HMM generated consensus sequence [hmmemit]

dfedlVGieahlkkleslLcldsddeVrmiGIwGmgGIGKTTLAraLynq
lssqFdlscFvenskefsveqrpigldelgmqeqlLskilnqkdieienh
lgvlkerLkdkKVLlVLDDVdkleqLdaLaketpWfGpGSRIIiTTrDks
lLkahginhiYeVkcLseeeAlqLFcryAFgqksppdgfeeLskvevvkl
cgGLPLALkVlGssLrgKgskeeWedalprLetsldgenIesvLkvSYDg
LdeedKdcFLyiAcFFniekedlVkylLaeggeldgrvglkvLvdksLit
isddgrveMHdLlremgreiaseegcrpgkrqfLvdapeicdvltnrtgt
sVlGIsLDslsinkieliisekafkrMrnLrfLkiyssh

# Search for hits with the Arabidopsis NBS

tblastn \
     -query NBS_712.faa \
     -db $GENOTYPE \
     -out $GENOTYPE-nbs-blast-1.tsv \
     -outfmt '7 qseqid sseqid evalue pident score length nident mismatch gaps frames qstart qend sstart send qcovhsp qlen slen sseq' \
     -evalue 1e-10 \
     -dbsize 1000000 \
     -seg no \
     -word_size 3 \
     -max_intron_length 120 \
     -qcov_hsp_perc 20 \
     -xdrop_ungap 40 \
     -xdrop_gap 60 \
     -xdrop_gap_final 200 \
     -max_target_seqs 10000 \
     -num_threads $THREADS
     
# extract hits to a FASTA

awk -F'\t' '$1 !~ /^#/ {print ">"$1"_"$2"\n"$18}' $GENOTYPE-nbs-blast-1.tsv > $GENOTYPE-nbs-blast-1.faa

# Align the hits with Clustal Omega

clustalo \
	-i $GENOTYPE-nbs-blast-1.faa \
	-o $GENOTYPE-nbs-1.clustal \
	--outfmt=clustal \
	--dealign

# Build the round 1 HMM from the alignment and generate a consensus

hmmbuild \
	-n nbs-1 \
	nbs-1.hmm \
	$GENOTYPE-nbs-1.clustal

hmmemit -C --minu 0.25 nbs-1.hmm > nbs-consensus-1.faa

# Repeat the search with the round 1 HMM and develop the round 2 HMM

tblastn \
     -query nbs-consensus-1.faa \
     -db $GENOTYPE \
     -out $GENOTYPE-nbs-blast-2.tsv \
     -outfmt '7 qseqid sseqid evalue pident score length nident mismatch gaps frames qstart qend sstart send qcovhsp qlen slen sseq' \
     -evalue 1e-10 \
     -dbsize 1000000 \
     -seg no \
     -word_size 3 \
     -max_intron_length 120 \
     -qcov_hsp_perc 20 \
     -xdrop_ungap 40 \
     -xdrop_gap 60 \
     -xdrop_gap_final 200 \
     -max_target_seqs 10000 \
     -num_threads $THREADS

awk -F'\t' '$1 !~ /^#/ {print ">"$1"_"$2"\n"$18}' $GENOTYPE-nbs-blast-2.tsv > $GENOTYPE-nbs-blast-2.faa

clustalo \
	-i $GENOTYPE-nbs-blast-2.faa \
	-o $GENOTYPE-nbs-2.clustal \
	--outfmt=clustal \
	--dealign

hmmbuild \
	-n nbs-2 \
	nbs-2.hmm \
	$GENOTYPE-nbs-2.clustal

hmmemit -C --minu 0.25 nbs-2.hmm > nbs-consensus-2.faa

# Search with your species-specific NBS HMM and generate a BED file

tblastn \
     -query nbs-2-consensus.faa \
     -db $GENOTYPE \
     -out $GENOTYPE-nbs-blast-final.tsv \
     -outfmt  '7 qseqid sseqid evalue pident score length nident mismatch gaps frames qstart qend sstart send qcovhsp qlen slen' \
     -evalue 1e-10 \
     -dbsize 1000000 \
     -seg no \
     -word_size 3 \
     -max_intron_length 120 \
     -qcov_hsp_perc 20 \
     -xdrop_ungap 40 \
     -xdrop_gap 60 \
     -xdrop_gap_final 200 \
     -max_target_seqs 10000 \
     -num_threads $THREADS
     
#Convert to BED with script (from https://github.com/alex-kozik/atgc-01/blob/main/BLAST_BED_GFF/tcl_blast2bed_converter.tcl)
          
tclsh tcl_blast2bed_converter.tcl $GENOTYPE-nbs-blast-final.tsv $GENOTYPE-nbs-blast.bed 1 12 13 0 BED
    
# sort
     
sort -k1,1 -k2,2n -k3,3n $GENOTYPE-nbs-blast.bed  >  $GENOTYPE-nbs-blast.srt.bed
     
# merge
     
bedtools merge -d 240 -i $GENOTYPE-nbs-blast.srt.bed > $GENOTYPE-hmm-blast.bed

# NLR annotation with the NLR-Annotator

java -jar NLR-Annotator-v2.1b.jar \
	-i $DRAFT.fasta \
	-o $GENOTYPE-nlr-anno.txt \
	-g $GENOTYPE-nlr-anno.gff \
	-b $GENOTYPE-nlr-anno.bed \
	-a $GENOTYPE-nlr-anno-multalign.fasta \
	-f $DRAFT.fasta $GENOTYPE.nlr.fasta 0 \
	-t $THREADS \
	-x /path/to/NLR-Annotator/src/mot.txt \
	-y /path/to/NLR-Annotator/src/store.txt

# Take the intersection of the two callsets

# Step 1: Run bedtools intersect
	
bedtools intersect -a $GENOTYPE-nlr-anno.bed -b $GENOTYPE-hmm-blast.bed -wa -u > $GENOTYPE-nlr-anno-hmm-blast.bed

# Step 2: Sort the intersected file

sort -k1,1 -k2,2n $GENOTYPE-nlr-anno-hmm-blast.bed > $GENOTYPE-nlr-anno-hmm-blast.srt.bed

# Step 3: Merge overlapping intervals

bedtools groupby -i $GENOTYPE-nlr-anno-hmm-blast.srt.bed -g 1,2,3 -c 4 -o collapse > $GENOTYPE-nlr-final.bed

# ANNOTATE REPEAT ELEMENTS WITH EDTA

# We found the most recent version of EDTA (2.2.2) to be problematic and so relied on 2.2.0. This requires downgrading tensorflow, keras, h5py, and python. 

# Installation (via mamba)

mamba create -n edta-2.2.0 python=3.10
mamba activate edta-2.2.0
mamba install -c conda-forge -c bioconda -c r h5py==3.7 keras==2.11 tensorflow==2.11
mamba install edta=2.2.0

# Extract CDS from cs10 (or appropriate well-annotated reference): We did this in the Geneious Prime GUI.
# This should also be possible from the command line with gffread (untested)

gffread $GFF -g $DRAFT.fasta -x $CDS.fasta

# The resultant FASTA should have one concatenated CDS on each line, with gene names for headers. 

# Run EDTA

EDTA.pl \
	--genome $DRAFT.fasta \
	--cds $CDS.fasta \
	--force 1 \
	--sensitive 1 \
	--anno 1 \
	-t $THREADS

# Calculate LTR Assembly Index with LAI

LAI \
	-genome $DRAFT.fasta.mod \
	-intact $DRAFT.fasta.mod.EDTA.raw/LTR/$DRAFT.fasta.mod.pass.list \
	-all $DRAFT.fasta.mod.EDTA.anno/$DRAFT.fasta.mod.out \
	-t $THREADS