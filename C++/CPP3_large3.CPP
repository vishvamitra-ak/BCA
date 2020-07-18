#include<iostream.h>
#include<conio.h>
void main()
{
	int a,b,c,d;
	clrscr();

	cout<<"Enter 3 numbers"<<endl;
	cin>>a>>b>>c;

	d=a>b?(a>c?a:c):(b>c?b:c);

	cout<<d<<" is largest"<<endl;
	getch();
}