using UnityEngine;
using System.Collections;

public class Ball_Controller : MonoBehaviour 
{
	public GameObject Cube;
	int Invert;
	public int Towards_Player = 1;
	public int playerCount = 0;

	// Use this for initialization
	void Start () 
	{
		Invert = -1;
		Towards_Player = 1;
		rigidbody.velocity = new Vector3(2.0f, 0.0f, 5.0f);
		
	}
	
	// Update is called once per frame
	void Update () 
	{
		if(transform.position.z > 19)
		{
			for(int yyy = 0; yyy <3; yyy++){
				GameObject.Find ("Main Camera").GetComponent<Score>().IncreaseScore (1);
			}
			Start ();
			transform.position = new Vector3(0.0f, 0.0f, -12.0f);
		}
		
		if(transform.position.z < -19)
		{
			for(int yyy = 0; yyy <3; yyy++){
				GameObject.Find ("Main Camera").GetComponent<Score>().IncreaseScore (2);
			}
			Start ();
			transform.position = new Vector3(0.0f, 0.0f, 12.0f);
		}
		
	}
		
	void OnCollisionEnter(Collision ball_collide)
	{
		if(ball_collide.gameObject.name == "Wall_Left" || ball_collide.gameObject.name == "Wall_Right")
		{
			Invert = Invert * -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, 5.0f * Towards_Player);
			print (rigidbody.velocity);
		}
		
		if(ball_collide.gameObject.name == "Player")
		{
			Towards_Player = Towards_Player * -1;
			playerCount = 1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, 5.0f * Towards_Player);
		}
		if(ball_collide.gameObject.name == "Enemy")
		{
			Towards_Player = Towards_Player * -1;
			playerCount = 2;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, 5.0f * Towards_Player);
		}
		/*else if(ball_collide.gameObject.name == "Player")
		{
			Towards_Player = -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, -5.0f);
		}
		
		else if(ball_collide.gameObject.name == "Enemy")
		{
			Towards_Player = -1;
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, -5.0f);
		}*/
		else if (ball_collide.gameObject.name == "Cube"){
			Towards_Player = Towards_Player*(-1);
			Invert = Invert*(-1);
			rigidbody.velocity = new Vector3(10.0f *Invert, 0.0f, 5.0f * Towards_Player);
			Destroy (ball_collide.gameObject);
			if(playerCount == 2){
			GameObject.Find ("Main Camera").GetComponent<Score>().IncreaseScore (2);
			}
			if(playerCount == 1){
				GameObject.Find ("Main Camera").GetComponent<Score>().IncreaseScore (1);
			}
		}
	}
	
}
