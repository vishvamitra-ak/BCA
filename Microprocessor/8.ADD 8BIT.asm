	MVI C,00
	LDA 8000
	MOV B,A
	LDA 8001
	ADD B
	JNC GO
	INR C
GO:	STA 8002
	MOV A,C
	STA 9003
	HLT