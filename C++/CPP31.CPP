#include<iostream>
//#include<conio.h>
#include<stdlib.h>
using namespace std;
class account
{
	int code[10],qty[10],c,price[10],i;
public:
	account()
	{
		c=0;
	}
	menu()
	{
		int ch;
		//clrscr();
		system("cls");
		disp();
		cout<<"\n1.Sales\n2.Purchases\n3.Exit\nEnter Choice: ";
		cin>>ch;
		switch(ch)
		{
			case 1:sales();
				   menu();
			case 2:purchases();
				   menu();
			case 3:exit(0);
			default:cout<<"Invalid Choice!\n";
					menu();
		}
	}
	sales()
	{
		int kcode,kqty,f=0;
		if(c==0)
		{
			cout<<"No Data to sale\n";
			system("pause");
			//getch();
		}
		else
		{
			cout<<"Enter item code,qty:\n";
			cin>>kcode>>kqty;
			for(i=0;i<c;i++)
			{
				if(kcode==code[i])
				{
					if(qty[i]<kqty)
					{
						cout<<"Not Enough items to sell!\n";
						f=1;
						system("pause");
					}
					else
					{
						qty[i]-=kqty;
						if(qty[i]==0)
						{
							for(int j=i;j<c;j++)
							{
								code[j]=code[j+1];
								qty[j]=qty[j+1];
								price[j]=price[j+1];
							}
							c--;
						}
						f=1;
						break;
					}
				}
			}
			if(f==0)
			{
				cout<<"Item Not Found!\n";
			}
		}
		//getch();
	}
	purchases()
	{
		int kcode,kprice,kqty,f=0;
		cout<<"Enter item code,price,qty:\n";
		cin>>kcode>>kprice>>kqty;
		for(i=0;i<c;i++)
		{
			if(kcode==code[i])
			{
				qty[i]+=kqty;
				f=1;
				break;
			}
		}
		if(f==0)
		{
			code[c]=kcode;
			price[c]=kprice;
			qty[c]=kqty;
			c++;
		}
		//getch();

	}
	disp()
	{
		if(c==0)
		{
			cout<<"No Data!\n";
		}
		else
		{
			cout<<"No.\tCode\t\tPrice\t\tQty\n";
			cout<<"-------------------------------------------\n";
			for(i=0;i<c;i++)
			{
				cout<<i+1<<"\t"<<code[i]<<"\t\t"<<price[i]<<"\t\t"<<qty[i]<<endl;
			}
		}
	}
};
int main()
{
	account a;
	a.menu();
}
