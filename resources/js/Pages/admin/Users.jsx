import Main from '../layout/Main.jsx';

export default function Users({ users }) {

  return (
    <Main>
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">First Name</th>
          <th class="py-2 px-4 border-b">Last Name</th>
          <th class="py-2 px-4 border-b">Email</th>
        </tr>
      </thead>
      <tbody>
        {users.map((user) => (
          <tr>
            <td class="py-2 px-4 border-b text-center">{user.first_name}</td>
            <td class="py-2 px-4 border-b text-center" >{user.last_name}</td>
            <td class="py-2 px-4 border-b text-center">{user.email}</td>
          </tr>
        ))}
      </tbody>
    </table>
    </Main>
  )
}
