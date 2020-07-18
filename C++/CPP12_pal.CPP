#include<iostream.h>
#include<conio.h>
void main()
{
	int n,rem=0,rev=0,num=0;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;
	num=n;
	while(n>0)
	{
		rem=n%10;
		rev=rev*10+rem;
		n=(int) n/10;
	}
	if (rev==num)
		cout<<num<<" is palindrome\n";
	else
		cout<<num<<" is not palindrome\n";
	getch();
}