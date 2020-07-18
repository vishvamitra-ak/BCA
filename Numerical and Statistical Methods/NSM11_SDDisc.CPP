//Mean SD ci
#include<stdio.h>
#include<math.h>
main()
{

	int n,l,w,i,f[20],N=0,ci[20],cj[20];
	float x[20],u2[20],fu[20],fu2[20],mean,sd,sfu=0.0,sfu2=0.0,u[20];

	printf("Enter n:\n");
	scanf ("%d",&n);
	printf("Enter lower limit\n");
	scanf ("%d",&l);
	printf("Enter width of class interval:\n");
	scanf ("%d",&w);
	ci[0]=l;
	cj[0]=l+w;
	for(i=1;i<n;i++)
	{
		ci[i]=ci[i-1]+w;
		cj[i]=cj[i-1]+w;
	}
	for(i=0;i<n;i++)
	{
		x[i]=(float)(ci[i]+cj[i])/2;
		l=l+w;
	}
	printf("Enter frequency\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&f[i]);
		u[i]=(x[i]-x[(n/2)-1])/w;
		u2[i]=u[i]*u[i];
		fu[i]=f[i]*u[i];
		N+=f[i];
		fu2[i]=f[i]*u2[i];
		sfu+=fu[i];
		sfu2+=fu2[i];
	}
	mean=x[(n/2)-1]+(w*(float)(sfu/N));
	sd=sqrt((sfu2/N)-pow((sfu/N),2))*w;
	printf("CI\tf\tx\tu\tfu\tfu2\n");
	printf("-----------------------------------------------\n");
	for(i=0;i<n;i++)
		printf("%d-%d\t%d\t%.2f\t%.2f\t%.2f\t%.2f\n",ci[i],cj[i],f[i],x[i],u[i],fu[i],fu2[i]);
	printf("-----------------------------------------------\n");
	printf("\t%d\t\t\t%.2f\t%.2f\n",N,sfu,sfu2);
	printf("-----------------------------------------------\n");
	printf("\nMean=%.3f\nStd Deviation=%.3f",mean,sd);
}
