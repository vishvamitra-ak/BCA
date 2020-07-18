//SD stat method
#include<stdio.h>
//#include<conio.h>
#include<math.h>
main()
{
	//clrscr();
	int x[10],f[10],n,i,fx[10],N=0,s[10],sfx=0,x2[20],sfx2=0,fx2[20];
	float mean,sd;

	printf("Enter size of table\n");
	scanf ("%d",&n);
	printf("Enter variation\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&x[i]);
		x2[i]=(x[i]*x[i]);
	}
	printf("Enter frequency\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&f[i]);
		fx[i]=f[i]*x[i];
		N=N+f[i];
		sfx=sfx+fx[i];
		fx2[i]=f[i]*x2[i];
		sfx2=sfx2+fx2[i];
	}
	printf("\nx\tf\tfx\tx2\tfx2\n");
	printf("-----------------------------------\n");
	for(i=0;i<n;i++)
		printf("%d\t%d\t%d\t%d\t%d\n",x[i],f[i],fx[i],x2[i],fx2[i]);
	printf("-----------------------------------\n");
	printf("\t%d\t%d\t\t%d\n",N,sfx,sfx2);
	printf("-----------------------------------\n");
	mean=float(sfx)/N;
	sd=sqrt(((float)sfx2/N)-(mean*mean));
	printf("\nMean=%.3f\nStd Deviation=%.3f",mean,sd);
	//getch();
}
