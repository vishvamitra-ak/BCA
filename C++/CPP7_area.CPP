#include<iostream.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
	int ch;
	float pi=3.142,r,a,b,area;
	clrscr();
A:
	cout<<"\n1.Circle\n2.Rectangle\n3.Square\n4.Exit\nEnter Choice\n";
	cin>>ch;
	switch(ch)
	{
		case 1:cout<<"Enter radius: ";
			   cin>>r;
			   area=pi*r*r;
			   cout<<"Area= "<<area<<endl;
			   goto A;
		case 2:cout<<"Enter a and b:\n";
			   cin>>a>>b;
			   area=a*b;
			   cout<<"Area= "<<area<<endl;
			   goto A;
		case 3:cout<<"Enter a: ";
			   cin>>a;
			   area=a*a;
			   cout<<"Area= "<<area<<endl;
			   goto A;
		case 4:exit(0);
		default:cout<<"Invalid Choice!\n";
				goto A;
	}
}