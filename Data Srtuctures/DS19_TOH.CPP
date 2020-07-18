//TOH
#include<stdio.h>
#include<stdlib.h>
//#include<conio.h>
void toh (int,char,char,char);
main()
{
	int n;
	//clrscr();

	printf("Enter n:\n");
	scanf ("%d",&n);

	toh(n,'A','B','C');
	system("pause");
//	getch();
}
void toh (int n,char s,char d,char t)
{
	if(n>0)
	{
		toh(n-1,s,t,d);
		printf("%d moved from %c to %c\n",n,s,d);
		toh(n-1,t,d,s);
	}
}

