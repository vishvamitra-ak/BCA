#include<stdio.h>
#include<conio.h>
#include<math.h>
main()
{
	int i,j,m,n,a[10][10],norm=0,trace=0;
	float normal;
	clrscr();

	printf("Enter m and n\n ");
	scanf ("%d%d",&m,&n);
	printf("Enter %d*%d elements\n",m,n);
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
		{
			scanf("%d",&a[i][j]);
			norm+=a[i][j]*a[i][j];
			if(i==j)
				trace+=a[i][j];
		}
	}
	normal=sqrt(norm);
	printf("Matrix\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			printf("%d ",a[i][j]);
		printf("\n");
	}
	printf("\nTrace: %d Normal: %.3f\n",trace,normal);
	getch();
}