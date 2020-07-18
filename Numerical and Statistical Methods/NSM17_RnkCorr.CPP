//Spearman rank corelation
#include<stdio.h>
#include<conio.h>
#include<math.h>
void main()
{
	int i,j,t,n,x[20],y[20],sx[20],sy[20],rx[20],ry[20],d[20],d2[20],sumd=0;
	float rho;
	clrscr();

	printf("Enter the limit\n");
	scanf ("%d",&n);
	printf("Enter x value\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&x[i]);
		sx[i]=x[i];
	}
	printf("Enter y value\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&y[i]);
		sy[i]=y[i];
	}
	for(i=0;i<n;i++)
	{
		for(j=i+1;j<n;j++)
		{
			if(sx[i]<sx[j])
			{
				t=sx[i];
				sx[i]=sx[j];
				sx[j]=t;
			}
			if(sy[i]<sy[j])
			{
				t=sy[i];
				sy[i]=sy[j];
				sy[j]=t;
			}
		}
	}
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
		{
			if(x[i]==sx[j])
				rx[i]=j+1;
			if(y[i]==sy[j])
				ry[i]=j+1;
		}
	}
	for(i=0;i<n;i++)
	{
		d[i]=rx[i]-ry[i];
		d2[i]=d[i]*d[i];
		sumd+=d2[i];
	}
	rho=1-((6*sumd)/(float)(n*((n*n)-1)));
	printf("x\ty\trx\try\td\td2\n");
	printf("------------------------------------------\n");
	for(i=0;i<n;i++)
		printf("%d\t%d\t%d\t%d\t%d\t%d\t\n",x[i],y[i],rx[i],ry[i],d[i],d2[i]);
	printf("\t\t\t\t     -------\n");
	printf("\t\t\t\t\t%d\n",sumd);
	printf("\nRho=%.4f\n",rho);
	getch();
}