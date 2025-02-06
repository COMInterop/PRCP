This pipeline assumes one has long reads of an F1 and short reads for both F0s. 

Binned reads are assembled with NECAT, then polished with long reads with RACON and short reads with Clair3. 

Because the F0 short reads are used to polish the F1 haplotypes, we only take 1/1 calls, i.e. --haploid-precise in Clair3. 

This should resolve many homopolymer length errors and not reintroduce heterozygous SNPs.

