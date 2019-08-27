class A {
	public static void myfunc(){
			System.out.println("This is a class func");
	}
}
class B extends A{
		public static void myfunc(){
			System.out.println("This is b class func");
		}
}
class staticbinding{
	public static void main (String args []){
					A a= new B();
					a.myfunc();
	}
}