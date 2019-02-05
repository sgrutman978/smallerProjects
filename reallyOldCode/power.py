import httplib
conn = httplib.HTTPConnection("www.stevengrutman.com")
conn.request("GET", '/')
response = conn.getresponse()
print response.read()