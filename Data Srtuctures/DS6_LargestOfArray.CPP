//largest of array
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int a[5],i,large;

	printf("Enter 5 elements:\n");
	for(i=0;i<5;i++)
		scanf("%d",&a[i]);
	large=a[i];
	for(i=0;i<5;i++)
	{
		if(a[i]>large)
			large=a[i];
	}
	printf("Largest element=%d",large);
	getch();
}