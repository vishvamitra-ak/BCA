#include<iostream.h>
#include<conio.h>
void main()
{
	int y;
	clrscr();

	cout<<"Enter Year: ";
	cin>>y;

	if(y%4)
		cout<<y<<" is not a leap year\n";
	else
		cout<<y<<" is a leap year\n";
	getch();
}