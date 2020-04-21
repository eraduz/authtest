import requests


url = 'http://localhost/authtest/'
r = requests.get(url)
res = r.json()

for x in res['users']:
    apikey = x['apikey']

key = input("Whats the key cuh: ")

if key == apikey:
    print('good key')
else:
    print('key no existos')