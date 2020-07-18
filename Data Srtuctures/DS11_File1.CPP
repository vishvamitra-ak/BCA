//File
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int n;
	FILE *p;

	p=fopen("Name","w");
	printf("Enter value of n\n");
	fscanf(stdin,"%d",&n);
	putw(n,p);
	fclose(p);
	p=fopen("Name","r");
	n=getw(p);
	fprintf(stdout,"n=%d",n);
	fclose(p);
	getch();
}
