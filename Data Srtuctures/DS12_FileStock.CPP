//File #2
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int n,qty;
	char name[20];
	FILE *p;
	p=fopen("stock.txt","w");
	printf("Enter no,qty,name\n");
	for(int i=0;i<3;i++)
	{
		fscanf(stdin,"%d%d%s",&n,&qty,name);
		fprintf(p,"%d%d%s",n,qty,name);
	}
	fclose(p);
	p=fopen("stock.txt","r");
	for(i=0;i<3;i++)
	{
		fscanf(p,"%d%d%s",&n,&qty,name);
		fprintf(stdout,"%d%d%s",n,qty,name);
	}
	fclose(p);
	getch();
}