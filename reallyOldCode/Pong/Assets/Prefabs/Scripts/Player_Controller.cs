using UnityEngine;
using System.Collections;

public class Player_Controller : MonoBehaviour {

	public GameObject left_wall;
	public GameObject right_wall;

	// Use this for initialization
	void Start () 
	{
		
	}
	
	// Update is called once per frame
	void Update () 
	{
	
		
		Ray ray_position = Camera.main.ScreenPointToRay(Input.mousePosition);
		transform.position = new Vector3(ray_position.GetPoint(10.0f).x, 0.0f, transform.position.z);
		
		if(transform.position.x > right_wall.transform.position.x-(right_wall.transform.localScale.x))
		{
			transform.position = new Vector3(right_wall.transform.position.x-(right_wall.transform.localScale.x), 0.0f, transform.position.z);
			
		}
		
		else if(transform.position.x < left_wall.transform.position.x+(left_wall.transform.localScale.x))
		{
			transform.position = new Vector3(left_wall.transform.position.x+(left_wall.transform.localScale.x), 0.0f, transform.position.z);
			
		}
		
		/*if(Input.GetAxis("Fire 1"))
		{
			print ("I am woking!!!");
		}*/
	
	}
}
