//AM GM HM
#include<stdio.h>
//#include<conio.h>
#include<math.h>
main()
{
	//clrscr();

	float asum=0.0,g[10],hsum=0.0,am,gm,hm,gsum,v,h[10];
	int n,i,a[10];

	printf("Enter the limit: ");
	scanf ("%d",&n);
	printf("Enter elements:\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&a[i]);
		asum+=a[i];
	}
	am=asum/n;
	printf("AM=%.2f\n",am);
	for(i=0;i<n;i++)
	{
		h[i]=1/a[i];
		hsum+=h[i];
	}
	hm=n/hsum;
	printf("HM=%.2f\n",hm);
	for(i=0;i<n;i++)
	{
		g[i]=log10(a[i]);
		gsum+=g[i];
	}
	//v=gsum/n;
	gm=pow(10,gsum);
	printf("GM=%.2f\n",gm);
	//getch();
}
