using UnityEngine;
using System.Collections;

public class spin : MonoBehaviour {
	
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		transform.Rotate (new Vector3(0,1,0), 400*Time.deltaTime);
		transform.Translate (new Vector3(1,0,1));
	}
}
