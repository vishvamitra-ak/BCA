#include<iostream.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
	int a,b,c,ch;
	float d;
	clrscr();
A:
	cout<<"\nMenu\n----\n1.Add\n2.Sub\n3.Mult\n4.Div\n5.Exit\nEnter choice\n";
	cin>>ch;
	if(ch<1||ch>5)
		cout<<"Invalid Choice\n";
	if(ch==5)
		exit(0);
	cout<<"Enter two Numbers\n";
	cin>>a>>b;
	switch(ch)
	{
		case 1:c=a+b;
			   cout<<a<<"+"<<b<<"="<<c<<endl;
			   goto A;
		case 2:c=a-b;
			   cout<<a<<"-"<<b<<"="<<c<<endl;
			   goto A;
		case 3:c=a*b;
			   cout<<a<<"*"<<b<<"="<<c<<endl;
			   goto A;
		case 4:if(b==0)
			   {
					cout<<"Can not divide by zero\n";
					goto A;
			   }
			   d=(float)a/b;
			   cout<<a<<"/"<<b<<"="<<d<<endl;
			   goto A;
	}
}