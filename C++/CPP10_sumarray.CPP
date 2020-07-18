#include<iostream.h>
#include<conio.h>
void main()
{
	int n,s=0;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;

	for(int i=1;i<=n;i++)
		s+=i;
	cout<<"Sum of "<<n<<" numbers: "<<s;
	getch();
}