<style>
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
	}
	
	.body{
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items:center;
		background: #8444B5;
	}
	
	#form{
		width: 600px;
		height: 50vh;
		display: flex;
		justify-content: space-around;
		align-items: center;
		flex-direction: column;
		background: #8444B5;
		border: none;
		
	}
	#form .logo h1{
		font-family: sans-serif;
		font-size: 80px;
		color: #fff; 
	}
	#form #searchBox , #searchBtn{
		height: 50px;
	}
	#form #searchBox{
		border-bottom-Left-radius: 30px;
		border-top-Left-radius: 30px;
	}
	#form #searchBtn{
		border-bottom-right-radius: 30px;
		border-top-right-radius: 30px;
		width: 100px;
		fonr-size: 30px;
		display: flex;
		justify-content: center;
		align-items: center; 
		
	}
	
	
	/*Insert Page*/
	.insertPage{
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background: #6928FE;
	}
	#form2{
		background: #6928FE;
		width: 600px;
		border: none;
		color: #fff;
	}
	
	#form2 input,textarea,label{
		margin-bottom: 15px;
	}
	
	
	
	/*Result Page*/
	.result_page{
		height: 100vh;
		background: #8444B5;
	}
	.header{
		height: 20vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.header form{
		border: none;
		background: #8444B5;
	}
	.header h1{
		font-size: 30px;
		width: 200px;
		margin-left: 20px;
		color: #fff;
		text-align: center;
	}
	.header form input{
		border-top-Left-radius: 30px;
		border-bottom-Left-radius: 30px;
		
	}
	.header form  button{
		width: 80px;
		align-items: center;
		display: flex;
		justify-content: center;
		border-top-right-radius: 30px;
		border-bottom-right-radius: 30px;
		font-size: 20px;
	}
 	
	
	
	
	


</style>