#include <stdio.h>
#include <stdlib.h>

int summ(int N, int* result)
{
	int i;
	long int s = 0;
	int j = 0;

	for(i=0; i<=N; i++)
		if(i%3 == 0)
		{
			result[j] = i;
			j++;
		}

	return j;
}

int main(int argc, char** argv)
{
	int result[100];
	int i;

	int j = summ(atoi(argv[1]), result);
	
	for(i=0; i<j; i++)
		printf("%d\n",result[i]);

	return 0;
}
