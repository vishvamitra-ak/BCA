//Search
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
	int a[5],i,key;
	clrscr();

	printf("Enter 5 elements:\n");
	for(i=0;i<5;i++)
		scanf("%d",&a[i]);
	printf("Enter element to be searched:\n");
		scanf("%d",&key);
	for(i=0;i<5;i++)
	{
		if(a[i]==key)
		{
			printf("%d Found at %d postion",key,i+1);
			getch();
			exit(0);
		}
	}
	printf("%d not found",key);
	getch();
}