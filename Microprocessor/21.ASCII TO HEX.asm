	   LDA 8000
	   SUI 30
	   CPI 0A
	   JC SKIP
	   SUI 07

SKIP:	   STA 8001
	   HLT
