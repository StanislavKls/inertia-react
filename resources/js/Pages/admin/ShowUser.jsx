import Main from '../layout/Main.jsx';

export default function Users({ user }) {

  return (
    <Main>
    <table className="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th className="py-2 px-4 border-b">First Name</th>
          <th className="py-2 px-4 border-b">Last Name</th>
          <th className="py-2 px-4 border-b">Email</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td className="py-2 px-4 border-b text-center">{user.first_name}</td>
            <td className="py-2 px-4 border-b text-center" >{user.last_name}</td>
            <td className="py-2 px-4 border-b text-center">{user.email}</td>
          </tr>
      </tbody>
    </table>
    </Main>
  )
}
