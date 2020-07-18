//File #3
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int n,i,rn[10],m1[10],m2[10],tot[10];
	char na[10][10];
	float avg[10];
	FILE *q;

	q=fopen("stud","w");
	printf("Enter number of students:\n");
	scanf ("%d",&n);
	for(i=0;i<n;i++)
	{
		printf("Enter roll no,name,marks for student %d\n",i+1);
		fscanf(stdin,"%d%s%d%d",&rn[i],na[i],&m1[i],&m2[i]);
		fprintf(q,"%d%s%d%d",rn[i],na[i],m1[i],m2[i]);
	}
	for(i=0;i<n;i++)
	{
		tot[i]=m1[i]+m2[i];
		avg[i]=tot[i]/2.0;
		fprintf(q,"%d%.1f",tot[i],avg[i]);
	}
	fclose(q);
	q=fopen("stud","r");
	printf("Student Data\n");
	printf("------------\n");
	printf("Student\tRoll No\tName\tMarks1\tMarks2\tTotal\tAverage\n");
	printf("------------------------------------------------------\n");
	for(i=0;i<n;i++)
	{

		fscanf(q,"%d%s%d%d%d%f",&rn[i],na[i],&m1[i],&m2[i],&tot[i],&avg[i]);
		fprintf(stdout,"%d\t%d\t%s\t%d\t%d\t%d\t%f\n",i+1,rn[i],na[i],m1[i],m2[i],tot[i],avg[i]);
	}
	fclose(q);
	getch();
}