#include<iostream.h>
#include<conio.h>
class eo
{
	int n;
public:
	void in()
	{
		cout<<"Enter a number\n";
		cin>>n;
	}
	void disp()
	{
		if(n%2)
			cout<<n<<" is odd\n";
		else
			cout<<n<<" is even\n";
	}
};
void main()
{
	eo e;
	clrscr();
	e.in();
	e.disp();
	getch();
}