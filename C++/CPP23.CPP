#include<iostream>
using namespace std;
class sumdig
{
	int n;
public:
	in();
	disp();
};
sumdig::in()
{
	cout<<"Enter a number: ";
	cin>>n;
}
sumdig::disp()
{
	int sum=0,rem;
	while(n>0)
	{
		rem=n%10;
		sum+=rem;
		n=(int)n/10;
	}
	cout<<"Sum = "<<sum;
}
int main()
{
	//clrscr();
	sumdig s;
	s.in();
	s.disp();
}
