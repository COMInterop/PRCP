The genomes associated with this paper are archived in GenBank under accessions JBDLLE000000000 (Punto Rojo) and JBDLLD000000000 (Cherry Pie).

They are also available from Zenodo, with annotation GFFs, named in a way that complies with the PanSN spec. (DOI: 10.5281/zenodo.15283487)

The assembly strategy assumes one has long reads of an F1 and short reads for both F0s. 

Binned reads are assembled with NECAT, then polished with long reads with RACON and short reads with Clair3. 

Because the F0 short reads are used to polish the F1 haplotypes, we only take 1/1 calls, i.e. --haploid-precise in Clair3. 

This should resolve many homopolymer length errors and not reintroduce heterozygous SNPs.



