class A{
		int i=0;
	public void myfunc(){
		System.out.println("this is a class func");
	}

}

class  B extends A {
	int i=1;
	public void myfunc(){
		System.out.println("this is b class func");
	}

}

class dynamicbinding{
	
		public static void  main (String args[]){
			
			A a = new B();
			
			a.myfunc();
			System.out.println(a.i); // for static binding of properties.
			
		}

}