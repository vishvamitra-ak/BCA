//Insertion sort
#include<stdio.h>
//#include<conio.h>
int isort (int[],int);
main()
{
	//clrscr();
	int i,n,a[10];

	printf("Enter n\n");
	scanf ("%d",&n);
	printf("Enter %d elements:\n",n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	isort(a,n);
	//getch();
}
int isort (int a[10],int n)
{
	int i,j,t;
	for(i=1;i<n;i++)
	{
		t=a[i];
		j=i-1;
		while((t<a[j])&&(j>=0))
		{
			a[j+1]=a[j];
			j--;
		}
		a[j+1]=t;
	}
	printf("Sorted Array:\n");
	for(i=0;i<n;i++)
		printf("%d ",a[i]);
	return 0;
}
