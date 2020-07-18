#include<iostream.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
	int n;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;

	for(int i=2;i<=n/2;i++)
	{
		if((n%i)==0)
		{
			cout<<n<<" is not prime number\n";
			getch();
			exit(0);
		}
	}
	cout<<n<<" is a prime number";
	getch();
}
