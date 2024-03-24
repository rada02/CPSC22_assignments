from flask import Flask, request, jsonify
import pwd
import grp

app = Flask(__name__)

USERNAME = 'user1'
PASSWORD = 'passWord'

def authenicate():
        auth = request.authorization
        if not auth or auth.username != USERNAME or auth.password != PASSWORD:
             return  False
        return True
@app.route('/api/users', methods=['POST'])
def users():
	if request.method != ‘POST’:
		return jsonify({‘error’: ‘Method Not Allowed’}), 405
	if not authenticate():
		return jsonify({'error':'Unauthorized access1111'}),401
	users_info = {}
	for user in pwd.getpwall():
	        users_info[str(user.pw_uid)] = user.pw_name
	return jsonify(users_info)
@app.route('/api/groups', methods=['POST'])
def groups():
	if request.method != ‘POST’:
		return jsonify({‘error’: ‘Method Not Allowed’}), 405 
	if not authenticate():
		return jsonify({'error':'Unauthorized access2222'}), 401
	groups_info = {}
	
	for group in grp.getgrall():
		groups_info[str(group.gr_grid)] = group.gr_name
	return jsonify(groups_info)
@app.route(‘/’)
def index(): 
	return send_file('index.html')
if __name__ == '__main__'
	app.run(host='127.0.0.1',port=3000)
	
if __name__ == '__main__':
    app.run(host='0.0.0.0',port='3000')
