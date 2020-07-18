	   MVI C,00
	   LHLD 9000
	   XCHG
	   LHLD 8000
	   DAD D
	   JNC GO
	   INR C

GO:	   SHLD A000
	   MOV A,C
	   STA A002
	   HLT
