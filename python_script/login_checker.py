import requests
import re
import urllib.parse

url = "https://sso.joongbu.ac.kr/authentication/idpw/loginProcess"
params = {'agentId':'6', 'id':str(-----id------), 'pw':urllib.parse.unquote(str(----pw-----))}
res = requests.post(url, data=params)
pattern = re.compile("value=\"(.*)\"")
p_res = pattern.findall(res.text)
success_check = p_res[1]

#print(res.text)

if success_check == "성공":
	print("----success_message-----", end="")

