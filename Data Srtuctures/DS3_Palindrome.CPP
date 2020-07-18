//Palindrome
#include<stdio.h>
#include<conio.h>
void main()
{
	int n,num,rev=0,rem;
	clrscr();

	printf("Enter a number: ");
	scanf ("%d",&n);

	num=n;
	while(n>0)
	{
		rem=n%10;
		rev=rev*10+rem;
		n=(int)(n/10);
	}

	if(rev==num)
		printf("%d is a palindrome\n",num);
	else
		printf("%d is not a palindrome\n",num);
	getch();
}