#include<iostream.h>
#include<conio.h>
class pal
{
	int n,num,rev,rem;
public:
	in();
	calc();
	disp();
};
pal::in()
{
	cout<<"Enter a number: ";
	cin>>n;
	num=n;
}
pal::calc()
{
	rev=0;
	while(n>0)
	{
		rem=n%10;
		rev=rev*10+rem;
		n=(int)n/10;
	}
}
pal::disp()
{
	if(rev==num)
		cout<<num<<" is palindrome\n";
	else
		cout<<num<<" is not a palindrome\n";
}
void main()
{
	clrscr();
	pal p;
	p.in();
	p.calc();
	p.disp();
	getch();
}